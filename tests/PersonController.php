<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use DataTables;
use Config;
use App\Models\OrganizationPerson;
use App\Models\Organization;
use Excel;
use App\Imports\PersonsImport;
use App\Models\Party;
use App\Http\Requests\PersonRequest;
use Storage;
use App\Models\Contract;
class PersonController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->filter)){
            $textFilter = "Tháng ".date('m');
        }
        else{
            $textFilter = "";
        }
        return view('dashboards.hr_employees.persons.index',['filter'=>$textFilter]);
    }

    public function store(PersonRequest $request)
    {
        $data = $request->all();
        if($request->image =='undefined'){
            $nameImage = "";
        }
        else{
            $nameImage = storeImageHandle($request,'image','user_images','');
        }
        $data['image'] = $nameImage;
        $data['birthday'] = formatDateToDatabase($request->birthday);
        $data['start_day'] = formatDateToDatabase($request->start_day);
        $data['gender']   = Config::get('custom.user_gender.'.$request->gender);
        $data['identity_card_number_day'] = formatDateToDatabase($request->identity_card_number_day);
        $data['citizen_identity_number_day'] = formatDateToDatabase($request->citizen_identity_number_day);
        $person = Person::create($data);
        $this->savePartyTable($person);
        $listOrganizationId = $request->organization_id;
        $arrListOrganizationId = explode(',', $listOrganizationId);
        $this->addDataToOrganizationPerson($arrListOrganizationId,$person);
        $this->addContractOfPerson($request,$person->id);
        $data = [config('custom.notify_message')['add_success']];
        echo json_encode($data);
    }

    public function addContractOfPerson(Request $request,$personId)
    {
        $data = $request->all();
        $sign_day = strtotime($data['sign_day']);
        $expires_day = strtotime($data['expires_day']);
        if($request->category_contract_id!=""&&$request->contract_number!=""&&$request->file!=""&&$request->sign_day!=""&&$request->expires_day!=""&&$sign_day<$expires_day){
            $fileName = storeFileHandle($request,'file','contracts','');
            $data['sign_day'] = formatDateToDatabase($request->sign_day);
            $data['expires_day'] = formatDateToDatabase($request->expires_day);
            $data['file'] = $fileName;
            $data['person_id'] = $personId;
            $currentDay = date('Y-m-d');
            if(strtotime($data['expires_day'])>strtotime($currentDay)){
                $data['status'] = 0;
            }
            else{
                $data['status'] = 1;
            }
            $contract = Contract::create($data);
        }
    }

    public function savePartyTable($person)
    {
        $party = new Party();
        $party->partiable()->associate($person);
        $party->save();
    }

    public function addDataToOrganizationPerson($listOrganizationId,$person)
    {
        $organization = Organization::whereIn('id',$listOrganizationId)->get();
        $person->organizations()->attach($organization);
    }
    
    public function show(Request $request)
    {
        if($request->ajax()){
            $data = Person::with('organizations')->latest()->get();
            return DataTables::of($data)
            ->editColumn('birthday',function($person){
                return formatDateToDatePicker($person->birthday);
            })->editColumn('gender',function($person){
                return isset($person->gender) ? config('custom.show_gender')[$person->gender] : '';
            })->addColumn('position',function(Person $person){
                return isset($person->position->name) ? $person->position->name : '';
            })->addColumn('checkboxes','dashboards.checkboxes.person_checkboxes')
            ->addColumn('organization',function(Person $person){
                if(count($person->organizations)>1){
                    $personOrganizations = $person->organizations;
                    $str_organization = "";
                    foreach($personOrganizations as $personOrganization){
                        $str_organization .= $personOrganization->name.', ';
                    }
                    $str_organization = mb_substr($str_organization,0, -1);
                    return isset($str_organization) ? $str_organization : '';
                }
                else{
                    return isset($person->organizations[0]->name) ? $person->organizations[0]->name : '';
                }
            })->addColumn('birthday_month',function($person){
                return "Tháng ".getMonthFromDate($person->birthday);
            })->editColumn('status',function(Person $person){
                return showTextColorStatus($person->status,Config::get('custom.status_user.'.$person->status));
            })->addColumn('image_profile','dashboards.images.person_image')
            ->rawColumns(['action','image_profile','status','checkboxes'])->make(true);
        }
    }

    public function edit(Request $request)
    {
        $personId = $request->input('personId');
        $person = Person::findOrFail($personId);
        $person->gender = Config::get('custom.show_gender.'.$person->gender);
        $person->birthday = formatDateToDatePicker($person->birthday);
        $person->start_day = formatDateToDatePicker($person->start_day);
        $person->identity_card_number_day = formatDateToDatePicker($person->identity_card_number_day);
        $person->citizen_identity_number_day = formatDateToDatePicker($person->citizen_identity_number_day);
        $listOrganizationId = $person->organizations;
        $arrOrganization = [];
        for($i = 0 ; $i<count( $listOrganizationId); $i++){
            array_push($arrOrganization,$listOrganizationId[$i]['id']);
        }
        $person->organization = $arrOrganization;
        $contracts = $person->contracts;
        foreach($contracts as $contract){
            if($contract->status==0){
                $person->category_contract_id = $contract->category_contract_id;
                $person->contract_number = $contract->contract_number;
                $person->sign_day = formatDateToDatePicker($contract->sign_day);
                $person->expires_day = formatDateToDatePicker($contract->expires_day);
                $person->contract_file = $contract->file;
                $person->contract_status = $contract->status;
                $person->contract_id = $contract->id;
            }
        }
        echo json_encode($person);
    }

    public function update(PersonRequest $request,$id)
    {
        $data = $request->all();
        $person = Person::findOrFail($id);
        $oldImage = $person->image;
        if($data['image']=='undefined'){
            $data['image'] = $oldImage;
        }
        else{
            $nameImage = storeImageHandle($request,'image','user_images',$oldImage);
            $data['image'] = $nameImage;
        }
        $data['birthday'] = formatDateToDatabase($request->birthday);
        $data['start_day'] = formatDateToDatabase($request->start_day);
        $data['gender']   = Config::get('custom.user_gender.'.$request->gender);
        $data['identity_card_number_day'] = formatDateToDatabase($request->identity_card_number_day);
        $data['citizen_identity_number_day'] = formatDateToDatabase($request->citizen_identity_number_day);
        $person->update($data);
        $listOrganizationId = $request->organization_id;
        $arrListOrganizationId = explode(',', $listOrganizationId);
        $this->updateDataToOrganizationPerson($arrListOrganizationId,$person);
        $this->updateContractOfPerson($request,$id);
        $data = [config('custom.notify_message')['update_success']];
        echo json_encode($data);
    }

    public function updateContractOfPerson(Request $request,$personId)
    {
        $data = $request->all();
        $sign_day = strtotime($data['sign_day']);
        $expires_day = strtotime($data['expires_day']);
        if($request->category_contract_id!=""&&$request->contract_number!=""&&$request->file!=""&&$request->sign_day!=""&&$request->expires_day!=""&&$request->contract_status!=""&&$request->contract_id!=""&&$sign_day<$expires_day){
            $oldFile = Contract::find($request->contract_id)->file;
            $fileName = storeFileHandle($request,'file','contracts',$oldFile);
            $data['sign_day'] = formatDateToDatabase($request->sign_day);
            $data['expires_day'] = formatDateToDatabase($request->expires_day);
            $data['file'] = $fileName;
            $data['person_id'] = $personId;
            $contract = Contract::find($request->contract_id)->update($data);
        }
    }
    
    public function destroy($id)
    {
        $this->destroyOrganizationPerson($id);
        $this->deletePersonImageUpload($id);
        $this->deleteContractOfPerson($id);
        Person::destroy($id);
    }

    public function deleteContractOfPerson($personId)
    {
        $person = Person::find($personId);
        $contracts = $person->contracts;
        foreach($contracts as $contract){
            Contract::destroy($contract->id);
        }
    }

    public function deletePersonImageUpload($id)
    {
        $person = Person::findOrFail($id);
        $personImage = $person->image;
        Storage::disk('user_images')->delete($personImage);
    }

    public function destroyOrganizationPerson($personId)
    {
        $person = Person::find($personId);
        $organization = $person->organizations;
        $person->organizations()->detach($organization);
    }

    public function deleteMultiplePersons(Request $request)
    {
        $arrPersonId = $request->input('arr_person_id');
        foreach($arrPersonId as $personId){
            $this->destroy($personId);
        }
        echo config('custom.notify_message')['delete_success'];
    }

    public function importExcel(Request $request)
    {
        if(isset($request->excel)){
            $personImport = new PersonsImport;
            Excel::import($personImport, $request->file('excel'));
        }
    }

    public function showDetailPerson($id)
    {
        $person = Person::with('position')->findOrFail($id);
        $person->status_text = Config::get('custom.status_user.'.$person->status);
        $person->gender = Config::get('custom.show_gender.'.$person->gender);
        $person->birthday = formatDateToDatePicker($person->birthday);
        $person->citizen_identity_number_day = formatDateToDatePicker($person->citizen_identity_number_day);
        return view('dashboards.hr_employees.persons.detail',['person'=>$person]);
    }

    public function updateMultiplePerson(Request $request)
    {
        $arrPersonId = $request->arr_person_id;
        $arrPersonId = explode(',', $arrPersonId);
        $listOrganizationId = $request->organization_id;
        $arrListOrganizationId = explode(',', $listOrganizationId);
        foreach($arrPersonId as $personId){
            $person = Person::findOrFail($personId);
            $person->update([
                'position_id' => $request->position_id,
                'status' => $request->status,
            ]);
            $this->updateDataToOrganizationPerson($arrListOrganizationId,$person);
        }
        echo config('custom.notify_message')['update_success'];
    }

    public function updateDataToOrganizationPerson($listOrganizationId,$person)
    {
        $organization = Organization::whereIn('id',$listOrganizationId)->get();
        $person->organizations()->sync($organization);
    }

    public function getContractByPersonId(Request $request)
    {
        $personId = $request->personId;
        $contracts = Contract::with('category_contract','person')->where('person_id',$personId)
        ->get(['id','contract_number','category_contract_id','person_id','sign_day','expires_day','file']);
        return DataTables::of($contracts)->addIndexColumn()->addColumn('category_contract_name',function($contract){
            return $contract->category_contract->name;
        })->editColumn('sign_day',function($contract){
            return formatDateToDatePicker($contract->sign_day);
        })->editColumn('expires_day',function($contract){
            return formatDateToDatePicker($contract->expires_day);
        })->editColumn('file',function($contract){
            return view('dashboards.files.contract_files',['contract'=>$contract]);
        })->rawColumns(['file'])->make(true);
    }
}
