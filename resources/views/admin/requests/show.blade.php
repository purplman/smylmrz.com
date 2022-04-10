<x-admin.layouts.main title="Request details">
    <x-admin.card>
        <div class="card__body">
            <x-admin.card-title>Client details</x-admin.card-title>
            <ul class="text-muted">
                <li>
                    Name: {{  $request->name }}
                </li>
                <li>
                    Company: {{  $request->company_name }}
                </li>
            </ul>

            <div class="divider"></div>

            <x-admin.card-title>Contact information</x-admin.card-title>

            <ul class="text-muted">
                <li>
                    Email: {{  $request->email }}
                </li>
                @if ($request->phone_number)
                <li>
                    Company: {{  $request->phone_number }}
                </li>
                @endif
            </ul>

            <div class="divider"></div>

            <x-admin.card-title>Project details</x-admin.card-title>

            <ul class="text-muted">
                @if ($request->subject)
                <li>
                    Subject: {{  $request->subject }}
                </li>
                @endif

                @if ($request->budget)
                <li>
                    Budget (USD): {{  $request->budget }} 
                </li>
                @endif
            </ul>

            <div class="divider"></div>

            <p class="text-muted">{{ $request->content }}</p>

            <div class="divider"></div>

            <a class="btn" href="mailto:{{ $request->email }}">
                Reply with an email
            </a>

        </div>
    </x-admin.card>
</x-admin.layouts.main>

