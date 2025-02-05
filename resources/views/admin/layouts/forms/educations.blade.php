<div class="col-12">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
        value="{{ old('name', $contact->name ?? '') }}" required>
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
        value="{{ old('email', $contact->email ?? '') }}" required>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="subject" class="form-label">Subject</label>
    <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" id="subject"
        value="{{ old('subject', $contact->subject ?? '') }}" required>
    @error('subject')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="message" class="form-label">Message</label>
    <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" rows="5"
        required>{{ old('message', $contact->message ?? '') }}</textarea>
    @error('message')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
