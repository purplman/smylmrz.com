<x-app.layouts.master title="Contact">
    <div class="contact">
        <div class="container">
            <x-app.caption class="mb-0">Let's talk</x-app.caption>
            <h1 class="title">How can we help you out?</h1>

            <div class="mt-5">
                <form class="form" method="post" action="{{ route('request') }}">
                    @csrf
                    <div class="form__row">
                        <x-app.form-box type="text" name="name" required="{{ true }}" placeholder="Your name">
                            Name
                        </x-app.form-box>
                        <x-app.form-box type="text" name="company_name" required="{{ true }}" placeholder="Your company name">
                            Company
                        </x-app.form-box>
                        <x-app.form-box type="email" name="email" required="{{ true }}" placeholder="Your email">
                            Email
                        </x-app.form-box>
                    </div>
                    <div class="form__row">
                        <x-app.form-box type="text" name="phone_number" required="{{ false }}" placeholder="Your phone number">
                            Phone
                        </x-app.form-box>
                        <x-app.form-box type="text" name="subject" required="{{ false }}" placeholder="Your company name">
                            Subject
                        </x-app.form-box>
                        <x-app.form-box type="text" name="budget" required="{{ false }}" placeholder="Your budget">
                            Budget
                        </x-app.form-box>
                    </div>
                    <div class="form__box">
                        <label class="form__label">
                            <span>Project details</span>
                        </label>
                        <textarea name="content" class="form__textarea" placeholder="Tell us about your project" rows="10"></textarea>
                    </div>

                    <button class="btn">Get a quote</button>
                </form>
            </div>
        </div>
    </div>
</x-app.layouts.master>