<x-layout>
    <x-page-heading>Post New Job</x-page-heading>
    <x-forms.form method="POST" action="{{ route('jobs.store') }}">
        <x-forms.input label="Title" name="title" placeholder="Software Engineer" />
        <x-forms.input label="Salary" name="salary" placeholder="$95,000 USD" />
        <x-forms.input label="location" name="location" placeholder="Accra, Ghana" />
        <x-forms.select label="Work Type" name="work_type">
            <option>Full Time</option>
            <option>Part Time</option>
            <option>Contract</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="https://example.com" />
        <x-forms.divider />
        <x-forms.checkbox label="Featured (Show on homepage) - $50.00 USD" name="featured" />
        <x-forms.input label="Tags(separated by comma)" name="tags"
            placeholder="photoshop, illustrator, javascript, php, python, software developer" />
        <x-forms.button>Publish Job</x-forms.button>
    </x-forms.form>
</x-layout>
