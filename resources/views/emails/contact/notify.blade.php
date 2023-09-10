@component('mail::message')
    <p>Services: {{implode(' - ', $data['services'])}}</p>
    <p>Name: {{$data['firstName'].' '.$data['lastName']}}</p>
    <p>Email: {{$data['email']}}</p>
    <p>Phone Number: {{$data['phoneNumber']}}</p>
    <p>Compnany: {{$data['compnany']}}</p>
    <p>website: {{$data['website']}}</p>
    <p>Budget: {{implode('-', $data['budget'])}}</p>
    <p>services: {{$data['message']}}</p>
@endcomponent
