<div class="col-12">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name"
        value="{{ old('name', $contact->name ?? '') }}" required>
</div>
<div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email"
        value="{{ old('email', $contact->email ?? '') }}" required>
</div>
<div class="col-12">
    <label for="subject" class="form-label">Subject</label>
    <input type="text" name="subject" class="form-control" id="subject"
        value="{{ old('subject', $contact->subject ?? '') }}" required>
</div>
<div class="col-12">
    <label for="message" class="form-label">Message</label>
    <textarea name="message" class="form-control" id="message" rows="5"
        required>{{ old('message', $contact->message ?? '') }}</textarea>
</div>
