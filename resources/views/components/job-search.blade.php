<section class="text-center pt-6">
    <h1 class="text-4xl font-bold ">No Fluff. Just Real Jobs Everyday.</h1>
    {{-- <form action="" class="mt-6">
        <input type="text" placeholder="Search for your next job..."
            class="rounded-2xl bg-white/5 border-white/10 py-4 px-6 w-full max-w-2xl">
    </form> --}}
    <x-forms.form class="mt-6" action="/search">
        <x-forms.input :label="false" name="q" placeholder="Search by title, companies, expertise" />
    </x-forms.form>
</section>
