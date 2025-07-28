<x-admin.layout.app title="Settings">
   
    <div class="container m-auto">
        <div class="row" style="justify-content: end;margin-top: 25%;">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Site Settings</h5>
                        <button type="button" class="btn btn-sm btn-primary" id="add-new-field">
                            <i class="bi bi-plus"></i> Add New Setting
                        </button>
                    </div>
                    <div class="card-body">
                        <form id="settings-form" action="{{ route('admin.settings.update') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <h6 class="mb-3">Basic Settings</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Site Name</label>
                                            <input type="text" class="form-control" name="site_name"
                                                value="{{ old('site_name', $settings->get('site_name')) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Contact Email</label>
                                            <input type="email" class="form-control" name="contact_email"
                                                value="{{ old('contact_email', $settings->get('contact_email')) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="dynamic-fields-container">
                                @foreach($settings->get() as $key => $value)
                                @if(!in_array($key, ['site_name', 'contact_email']) && is_string($value))
                                <div class="dynamic-field mb-3 row align-items-center">
                                    <div class="col-md-5">
                                        <input type="text" class="form-control field-key"
                                            value="{{ $key }}" placeholder="Setting key">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control field-value"
                                            value="{{ $value }}" placeholder="Setting value">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger remove-field">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Save Settings</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('dynamic-fields-container');
            const form = document.getElementById('settings-form');

            // Add new field
            document.getElementById('add-new-field').addEventListener('click', function() {
                const fieldHTML = `
        <div class="dynamic-field mb-3 row align-items-center">
            <div class="col-md-5">
                <input type="text" class="form-control field-key" placeholder="Setting key">
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control field-value" placeholder="Setting value">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger remove-field">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>`;

                container.insertAdjacentHTML('beforeend', fieldHTML);

                // Add event to new remove button
                container.lastElementChild.querySelector('.remove-field').addEventListener('click', function() {
                    this.closest('.dynamic-field').remove();
                });
            });

            // Remove field
            document.querySelectorAll('.remove-field').forEach(button => {
                button.addEventListener('click', function() {
                    this.closest('.dynamic-field').remove();
                });
            });

            // Form submission handler
            form.addEventListener('submit', function(e) {
                // Convert dynamic fields to proper format
                document.querySelectorAll('.dynamic-field').forEach(field => {
                    const keyInput = field.querySelector('.field-key');
                    const valueInput = field.querySelector('.field-value');

                    if (keyInput.value && valueInput.value) {
                        // Create hidden input for the dynamic field
                        const input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = keyInput.value;
                        input.value = valueInput.value;
                        form.appendChild(input);
                    }
                });
            });
        });
    </script>
</x-admin.layout.app>