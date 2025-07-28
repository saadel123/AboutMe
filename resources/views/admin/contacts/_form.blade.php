<x-admin.ui.form-card :title="isset($contact) ? 'Modifier un contact' : 'Ajouter un contact'" :action="isset($contact) ? route('admin.contacts.update', $contact) : route('admin.contacts.store')" :method="isset($contact) ? 'PUT' : 'POST'"
    submit-label="{{ isset($contact) ? 'Mettre à jour' : 'Créer' }}" :show-reset="!isset($contact)">
    {{-- Nom --}}
    <x-admin.ui.inputs.text id="name" name="name" label="Nom" :value="$contact->name ?? ''" required />

    {{-- Email --}}
    <x-admin.ui.inputs.text id="email" name="email" label="Email" type="email" :value="$contact->email ?? ''" required />

    {{-- Téléphone --}}
    <x-admin.ui.inputs.text id="phone" name="phone" label="Téléphone" :value="$contact->phone ?? ''" />

    {{-- Objet --}}
    <x-admin.ui.inputs.text id="object" name="object" label="Objet" :value="$contact->object ?? ''" />

    {{-- Message --}}
    <x-admin.ui.inputs.textarea id="message" name="message" label="Message" :value="$contact->message ?? ''" rows="5" />
</x-admin.ui.form-card>
