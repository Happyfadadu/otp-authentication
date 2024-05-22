@extends('frontend.layouts.main')
@section('main-container')
<div class="page page-without-footer">
    <div class="container-fluid">
        <div class="page-title mb-3 pb-2">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="font-14 mb-0 text-md">Overview</h1>
                </div>
                <div class="col-auto">
                    <select class="selectpicker selectMonth month-select" data-size="8" data-width="185px">
                        <option value="January 2024">January 2024</option>
                        <option value="February 2024">February 2024</option>
                        <option value="March 2024">March 2024</option>
                        <option value="May 2024">May 2024</option>
                        <option value="June 2024">June 2024</option>
                        <option value="July 2024">July 2024</option>
                        <option value="August 2024">August 2024</option>
                        <option value="September 2024">September 2024</option>
                        <option value="October 2024">October 2024</option>
                        <option value="November 2024">November 2024</option>
                        <option value="December 2024">December 2024</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="theme-card secondary-card">
                    <div class="d-flex flex-column">
                        <h2 class="font-12 text--gray mb-0 text-md pb-2 mb-1">
                            Orders Submitted
                        </h2>
                        <h3 class="font-44 mb-0 text-sb">58</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="theme-card primary-card">
                    <div class="d-flex flex-column">
                        <h2 class="font-12 text--gray mb-0 text-md pb-2 mb-1">
                            Orders Pending
                        </h2>
                        <h3 class="font-44 mb-0 text-sb">12</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="theme-card secondary-card">
                    <div class="d-flex flex-column">
                        <h2 class="font-12 text--gray mb-0 text-md pb-2 mb-1">
                            Orders Completed
                        </h2>
                        <h3 class="font-44 mb-0 text-sb">1,272</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="theme-card primary-card">
                    <div class="d-flex flex-column">
                        <h2 class="font-12 text--gray mb-0 text-md pb-2 mb-1">
                            Active Campaigns
                        </h2>
                        <h3 class="font-44 mb-0 text-sb">237</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="theme-card secondary-card">
                    <div class="d-flex flex-column">
                        <h2 class="font-12 text--gray mb-0 text-md pb-2 mb-1">
                            Value of Active Rewards
                        </h2>
                        <div class="d-flex align-items-baseline gap-4">
                            <h3 class="font-44 mb-0 text-sb">>R1,283,493</h3>
                            <div class="common-rating-box d-flex align-items-baseline gap-2">
                                <img src="{{url('frontend/images/up-rate-icon.svg')}}" width="20" height="13" alt="Up Rate Icon" title="up-rate-icon" />
                                <h4 class="font-12 text--success text-md mb-0">29%</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="theme-card primary-card">
                    <div class="d-flex flex-column">
                        <h2 class="font-12 text--gray mb-0 text-md pb-2 mb-1">
                            Value of Expired Rewards
                        </h2>
                        <div class="d-flex align-items-baseline gap-4">
                            <h3 class="font-44 mb-0 text-sb">R237,499</h3>
                            <div class="common-rating-box d-flex align-items-baseline gap-2">
                                <img src="{{url('frontend/images/down-rate-icon.svg')}}" width="20" height="13" alt="Down Rate Icon" title="down-rate-icon" />
                                <h4 class="font-12 text--error text-md mb-0">3%</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-title mb-3 mt-4 pt-2">
            <div class="row align-items-center">
                <div class="col-auto">
                    <h1 class="font-14 mb-0 text-md">Latest Activity</h1>
                </div>
            </div>
        </div>

        <div class="common-datatable row mt-0">
            <div class="col-12">
                <table id="common-table" class="table" style="width: 100%" data-paging="false" data-info="false" data-searching="false">
                    <thead>
                        <tr>
                            <th>Order No</th>
                            <th>Campaign</th>
                            <th>Type</th>
                            <th>Order Submitted by</th>
                            <th>Qty</th>
                            <th>Status</th>
                            <th>Used</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3148071093491</td>
                            <td>Campaign Name 1</td>
                            <td>Vouchers: API’s</td>
                            <td>Sarah James</td>
                            <td>500</td>
                            <td class="text--purple">Submitted</td>
                            <td class="text--green">0</td>
                        </tr>
                        <tr>
                            <td>130954090923</td>
                            <td>Campaign Name 2</td>
                            <td>Vouchers: Download</td>
                            <td>Peter Brown</td>
                            <td>1000</td>
                            <td class="text--blue">Active</td>
                            <td class="text--yellow">900</td>
                        </tr>
                        <tr>
                            <td>320498029833</td>
                            <td>Campaign Name 3</td>
                            <td>PIN</td>
                            <td>Sarah James</td>
                            <td>800</td>
                            <td class="text--blue">Active</td>
                            <td class="text--red">800</td>
                        </tr>
                        <tr>
                            <td>235409809823</td>
                            <td>Campaign Name 4</td>
                            <td>Vouchers: API’s</td>
                            <td>Peter Brown</td>
                            <td>480</td>
                            <td class="text--blue">Active</td>
                            <td class="text--red">480</td>
                        </tr>
                        <tr>
                            <td>123049298292</td>
                            <td>Campaign Name 1</td>
                            <td>Vouchers: Download</td>
                            <td>Sarah James</td>
                            <td>2400</td>
                            <td class="text--purple">Submitted</td>
                            <td class="text--green">0</td>
                        </tr>
                        <tr>
                            <td>2109817348334</td>
                            <td>Campaign Name 5</td>
                            <td>Vouchers: API’s</td>
                            <td>Peter Brown</td>
                            <td>300</td>
                            <td class="text--blue">Active</td>
                            <td class="text--yellow">200</td>
                        </tr>
                        <tr>
                            <td>315987239845</td>
                            <td>Campaign Name 3</td>
                            <td>PIN</td>
                            <td>Peter Brown</td>
                            <td>5000</td>
                            <td class="text--blue">Active</td>
                            <td class="text--red">5000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="{{url('frontend/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('frontend/js/popper.min.js')}}"></script>
<script src="{{url('frontend/js/datatables.min.js')}}"></script>
<script src="{{url('frontend/js/bootstrap-select.min.js')}}"></script>
<script src="{{url('frontend/js/custom.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".selectMonth").selectpicker();
    });
</script>