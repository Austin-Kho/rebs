<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="/admin"><i
                            class="nav-icon icon-speedometer"></i> {{ __('Dashboard') }}</a></li>

            <li class="nav-title">{{ __('Project Manage') }}</li>

            <li class="nav-item"><a class="nav-link" href="{{ url('admin/1') }}"><i
                            class="nav-icon icon-calendar"></i> {{ __('Scheduling') }}</a></li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon icon-note"></i> {{ __('Project Contracts') }}
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/2') }}"> {{ __('Contract Status') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/3') }}"> {{ __('Contract Register') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/4') }}"> {{ __('Contractor Info') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/5') }}"> {{ __('Unit Contract Table') }}</a></li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon icon-loop"></i> {{ __('Payment Manage') }}
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/6') }}"> {{ __('Payment Status') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/7') }}"> {{ __('Payment register') }}</a></li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i
                            class="nav-icon icon-envelope-letter"></i> {{ __('Contractor Notice') }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/8') }}"> {{ __('Payment Invoice') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/9') }}"> {{ __('SMS transfers') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/10') }}"> {{ __('MAIL transfers') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/11') }}"> {{ __('Address Book') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/12') }}"> {{ __('Transfers Record') }}</a></li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i
                            class="nav-icon icon-share-alt"></i> {{ __('Budget Manage') }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/13') }}"> {{ __('Project Cost Status') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/14') }}"> {{ __('Withdrawal Register') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/15') }}"> {{ __('Accounts Payable') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/16') }}"> {{ __('Budget Register') }}</a></li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon icon-doc"></i> {{ __('Project Documents') }}
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/17') }}"> {{ __('Received documents') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/18') }}"> {{ __('Sent Documents') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/19') }}"> {{ __('Lawsuit Record') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/20') }}"> {{ __('Agreement-Contract') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/21') }}"> {{ __('Deeds-Certifications') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/22') }}"> {{ __('Regulations') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/23') }}"> {{ __('Document Form') }}</a></li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i
                            class="nav-icon icon-pie-chart"></i> {{ __('Project Settings') }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/24') }}"> {{ __('Initial Classification') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/25') }}"> {{ __('Register Type') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/26') }}"> {{ __('Register Floor Cond') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/27') }}"> {{ __('Sale Price by Condition') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/28') }}"> {{ __('Payment Order') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/29') }}"> {{ __('Session Payment') }}</a></li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i
                            class="nav-icon icon-location-pin"></i> {{ __('Project Register') }}</a>
                <ul class="nav-dropdown-items">
{{--                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/30') }}"> {{ __('Project List') }}</a></li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/31') }}"> {{ __('Project Register') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/32') }}"> {{ __('Site List') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/33') }}"> {{ __('Manage Site by Owner') }}</a></li>
                </ul>
            </li>

            <li class="nav-title">{{ __('Company Manage') }}</li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon icon-docs"></i> {{ __('Company Documents') }}
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/34') }}"> {{ __('[Inside] Draft Document') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/35') }}"> {{ __('Received documents') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/36') }}"> {{ __('Sent Documents') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/37') }}"> {{ __('Lawsuit Record') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/38') }}"> {{ __('Agreement-Contract') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/39') }}"> {{ __('Deeds-Certifications') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/40') }}"> {{ __('Regulations') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/41') }}"> {{ __('Document Form') }}</a></li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon icon-plus"></i> {{ __('Company Funds') }}
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/42') }}"> {{ __('Funds Daily Report') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/43') }}"> {{ __('Deposit History') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/44') }}"> {{ __('Deposit registration') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/45') }}"> {{ __('Bonds-Debt') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/rebs-bank-accounts') }}"> {{ __('Bank Account') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/47') }}"> {{ __('Transaction company') }}</a></li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i
                            class="nav-icon icon-people"></i> {{ __('Human Resource') }}</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/48') }}"> {{ __('Employee Info') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/49') }}"> {{ __('Manage Position') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/50') }}"> {{ __('Manage Performance') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/rebs-departments') }}"> {{ __('Manage Departments') }}</a></li>
                </ul>
            </li>

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i
                            class="nav-icon icon-settings"></i> {{ __('Preferences') }}</a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/profile') }}"> {{ __('Profile') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/rebs-companies') }}"> {{ trans('admin.rebs-company.title') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/52') }}"> {{ __('Working Log') }}</a></li>
                    @if (Auth::id() === 1)
                        <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"> {{ __('Manage access') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('admin/53') }}"> {{ __('Permission Settings') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"> {{ __('Translations') }}</a></li>
                    @endif
                </ul>
            </li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
