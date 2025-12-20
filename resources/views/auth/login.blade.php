<x-layout>
    <x-page-heading>Log In</x-page-heading>
    <x-forms.form method="POST" action="/register">
        <x-forms.input label="Email" name="email" type="email" placeholder="email@email.com" />
        <x-forms.input label="Password" name="password" type="password" placeholder="********" />
        <x-forms.button>Login</x-forms.button>
    </x-forms.form>
</x-layout>
