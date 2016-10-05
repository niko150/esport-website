@extends('layouts.front')

@section('title', trans('texts.donation_title'))

@section('content')
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-intro">
                        <h1>Donate for Next Gen DotA 2</h1>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#donation_methods" type="onpage"
                                   class="btn btn-default btn-lg"><i class="fa fa-paypal fa-fw"></i>
                                    PayPal</a>
                            </li>
                            <li>
                                <a href="#donation_methods" type="onpage"
                                   class="btn btn-default btn-lg"><i class="fa fa-university fa-fw"></i> <span
                                            class="network-name">@lang('contents.bank_transfer')</span></a>
                            </li>
                            <li>
                                <a href="#charging_card" type="onpage"
                                   class="btn btn-default btn-lg"><i class="fa fa-credit-card fa-fw"></i> <span
                                            class="network-name">@lang('contents.charging_card')</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="section-heading"
                        id="heading_cost_details"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_cost_details') !!}</h3>
                    <div class="lead" id="cost_details"
                         data-editable="true">{!! ContentBlock::output($view_name, 'cost_details') !!}</div>
                </div>
                <div class="col-lg-6">
                    <h3 class="section-heading"
                        id="heading_team_targets"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_team_targets') !!}</h3>
                    <div class="lead" id="team_targets"
                         data-editable="true">{!! ContentBlock::output($view_name, 'team_targets') !!}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="text-align: center">
                    <h3 class="section-heading"
                        id="heading_whats_next"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_whats_next') !!}</h3>
                    <div class="lead" id="whats_next"
                         data-editable="true">{!! ContentBlock::output($view_name, 'whats_next') !!}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-push-5 col-sm-6">
                    <h3 class="section-heading"
                        id="heading_wesg"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_wesg') !!}</h3>
                    <div class="lead" id="wesg_details" data-editable="true">
                        {!! ContentBlock::output($view_name, 'wesg_details') !!}</div>
                </div>
                <div class="col-lg-5 col-sm-pull-7 col-sm-6">
                    <img class="img-responsive" src="{!! URL::asset('images/wesg.jpg') !!}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <h3 class="section-heading"
                        id="heading_rog"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_rog') !!}</h3>
                    <div class="lead" id="rog_details"
                         data-editable="true">{!! ContentBlock::output($view_name, 'rog_details') !!}</div>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-sm-6">
                    <img class="img-responsive" src="{!! URL::asset('images/rog.jpg') !!}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="text-align: center">
                    <h3 class="section-heading"
                        id="heading_progress"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_progress') !!}</h3>
                    <p class="text-muted" id="heading_progress_small"
                       data-editable="true">{!! ContentBlock::output($view_name, 'heading_progress_small') !!}</p>
                    <h5 class="section-heading"
                        id="progress_tour_cost"
                        data-editable="true">{!! ContentBlock::output($view_name, 'progress_tour_cost') !!}</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped active"
                             role="progressbar"
                             aria-valuenow="{{ Setting::getJSON('donation_values')->tour_cost }}"
                             aria-valuemin="0"
                             aria-valuemax="{{ Setting::getJSON('donation_targets')->tour_cost }}"
                             style="min-width: 2em; width: {{ round(Setting::getJSON('donation_values')->tour_cost / Setting::getJSON('donation_targets')->tour_cost * 100) }}%">
                            <span>{{ round(Setting::getJSON('donation_values')->tour_cost / Setting::getJSON('donation_targets')->tour_cost * 100) }}
                                %</span>
                        </div>
                    </div>

                    <h5 class="section-heading"
                        id="progress_event_cost"
                        data-editable="true">{!! ContentBlock::output($view_name, 'progress_event_cost') !!}</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped"
                             role="progressbar"
                             aria-valuenow="{{ Setting::getJSON('donation_values')->event_cost }}"
                             aria-valuemin="0"
                             aria-valuemax="{{ Setting::getJSON('donation_targets')->event_cost }}"
                             style="min-width: 2em; width: {{ round(Setting::getJSON('donation_values')->event_cost / Setting::getJSON('donation_targets')->event_cost * 100) }}%">
                            <span>{{ round(Setting::getJSON('donation_values')->event_cost / Setting::getJSON('donation_targets')->event_cost * 100) }}
                                %</span>
                        </div>
                    </div>
                    <h5 class="section-heading"
                        id="progress_month_cost"
                        data-editable="true">{!! ContentBlock::output($view_name, 'progress_month_cost') !!}</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped"
                             role="progressbar"
                             aria-valuenow="{{ Setting::getJSON('donation_values')->month_cost }}"
                             aria-valuemin="0"
                             aria-valuemax="{{ Setting::getJSON('donation_targets')->month_cost }}"
                             style="min-width: 2em; width: {{ round(Setting::getJSON('donation_values')->month_cost / Setting::getJSON('donation_targets')->month_cost * 100) }}%">
                            <span>{{ round(Setting::getJSON('donation_values')->month_cost / Setting::getJSON('donation_targets')->month_cost * 100) }}
                                %</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <a name="donation_methods"></a>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="section-heading"
                        id="heading_paypal"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_paypal') !!}</h3>
                    <div class="lead" id="paypal_details"
                         data-editable="true">{!! ContentBlock::output($view_name, 'paypal_details') !!}</div>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="NMBV5T8JJ4VD6">
                        <input type="image"
                               src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"
                               border="0"
                               name="submit"
                               alt="PayPal - The safer, easier way to pay online!">
                        <img alt=""
                             border="0"
                             src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
                             width="1"
                             height="1">
                    </form>
                </div>
                <div class="col-lg-6">
                    <h3 class="section-heading"
                        id="heading_bank_transfer"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_bank_transfer') !!}</h3>
                    <div class="lead" id="bank_transfer_details"
                         data-editable="true">{!! ContentBlock::output($view_name, 'bank_transfer_details') !!}</div>
                </div>
            </div>
        </div>
    </div>

    <a name="charging_card"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h3 class="section-heading"
                        id="heading_charging_card"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_charging_card') !!}</h3>
                    @if (count($errors) > 0)
                        <div class="row">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <form role="form" method="post" action="{{ route('dota2.card_donation') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="source" value="{{ $source }}">
                            <div class="form-group">
                                <label for="name">@lang('contents.your_name')</label>
                                <input type="name"
                                       value="{{ old('name') }}"
                                       name="name"
                                       class="form-control"
                                       id="name">
                            </div>
                            <div class="form-group">
                                <label for="provider">@lang('contents.card_provider')</label>
                                <select name="provider" class="form-control" id="provider">
                                    @foreach ($providers as $p => $p_name)
                                        <option value="{{ $p }}" {!! old('provider') == $p ? 'selected' : '' !!} >{{ $p_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pin">@lang('contents.card_pin')
                                    <small id="pin_format"></small>
                                </label>
                                <input type="text"
                                       value="{{ old('pin') }}"
                                       name="pin"
                                       class="form-control"
                                       required
                                       id="pin">
                            </div>
                            <div class="form-group">
                                <label for="serial">@lang('contents.card_serial')</label>
                                <input type="text"
                                       value="{{ old('serial') }}"
                                       name="serial"
                                       class="form-control"
                                       required
                                       id="serial">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">@lang('contents.btn_submit')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="text-align: center">
                    <h3 class="section-heading"
                        id="heading_tshirt"
                        data-editable="true">{!! ContentBlock::output($view_name, 'heading_tshirt') !!}</h3>
                    <p class="text-primary" id="tshirt_details"
                       data-editable="true">{!! ContentBlock::output($view_name, 'tshirt_details') !!}</p>
                    <div class="col-lg-6">
                        <div class="center-block">
                            <a target="_blank" href="https://www.facebook.com/commerce/products/1135118263248288/"><img class="img-responsive"
                                                                                                        src="{!! URL::asset('images/shirt1.jpg') !!}"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="center-block">
                            <a target="_blank" href="https://www.facebook.com/commerce/products/1135118263248288/"><img class="img-responsive"
                                                                                                        src="{!! URL::asset('images/shirt2.jpg') !!}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('foot')
    <script type="text/javascript">
        $('a[type="onpage"]').click(function () {
            $('html, body').animate({
                scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
            }, 500);
            return false;
        });

        $('#provider').on('change', function () {
            setPinPattern();
        });
        $(document).ready(function () {
            setPinPattern();
        });

        function setPinPattern() {
            var provider = $('#provider').val();
            switch (provider) {
                case 'VNP':
                case 'MGC':
                case 'ONC':
                case 'ZING':
//                    $('#pin').attr('pattern', '^\\d{12}$');
                    $('#pin_format').text('@lang('messages.card_pin_format', ['length' => 12])');
                    break;
                case 'VMS':
//                    $('#pin').attr('pattern', '^\\d{14}$');
                    $('#pin_format').text('@lang('messages.card_pin_format', ['length' => 14])');
                    break;
                case 'FPT':
//                    $('#pin').attr('pattern', '^\\d{10}$');
                    $('#pin_format').text('@lang('messages.card_pin_format', ['length' => 10])');
                    break;
                case 'VTT':
//                    $('#pin').attr('pattern', '^\\d{13,15}$');
                    $('#pin_format').text('@lang('messages.card_pin_format', ['length' => '13-15'])');
                    break;
            }
        }
    </script>
@stop