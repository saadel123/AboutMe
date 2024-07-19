@component('mail::message')
# New Contact Form Submission

**Name:** {{ $contact->name }}

**Email:** {{ $contact->email }}

**Subject:** {{ $contact->subject }}

**Message:**
{{ $contact->message }}

@endcomponent
