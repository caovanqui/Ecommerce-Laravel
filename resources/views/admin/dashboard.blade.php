@extends('layout.adminlayout')
@section('content')

<!-- MAIN  -->
<div id="main-container" class="pt-7 d-flex flex-column ms-auto">
    <div class="admin-main-content p-3 container-fluid">
        <div class="row g-3">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="dashboard-list overflow-hidden p-3 bg-white border border-2 border-secondary rounded-2 shadow-sm">
                    <div class="dashboard-list-content py-2 d-flex justify-content-between border-start border-primary border-4">
                        <div class="ms-3 dashboard-list-body">
                            <span class="text-border-color fs-5 fw-medium">Total Revenue</span>
                            <h4>$6659</h4>
                        </div>
                        <div class="dashboard-list-icon text-center align-self-center">
                            <ion-icon class="bg-secondary text-primary p-3 fs-4 rounded-2" name="file-tray-stacked"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="dashboard-list overflow-hidden p-3 bg-white border border-2 border-secondary rounded-2 shadow-sm">
                    <div class="dashboard-list-content py-2 d-flex justify-content-between border-start border-info border-4">
                        <div class="ms-3 dashboard-list-body">
                            <span class="text-border-color fs-5 fw-medium">Total Order</span>
                            <h4>1229</h4>
                        </div>
                        <div class="dashboard-list-icon text-center align-self-center">
                            <ion-icon class="bg-info bg-opacity-10 text-info p-3 fs-4 rounded-2" name="bag-handle"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="dashboard-list overflow-hidden p-3 bg-white border border-2 border-secondary rounded-2 shadow-sm">
                    <div class="dashboard-list-content py-2 d-flex justify-content-between border-start border-danger border-4">
                        <div class="ms-3 dashboard-list-body">
                            <span class="text-border-color fs-5 fw-medium">Total Products</span>
                            <h4>659</h4>
                        </div>
                        <div class="dashboard-list-icon text-center align-self-center">
                            <ion-icon class="bg-danger bg-opacity-10 text-danger p-3 fs-4 rounded-2" name="cube"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="dashboard-list overflow-hidden p-3 bg-white border border-2 border-secondary rounded-2 shadow-sm">
                    <div class="dashboard-list-content py-2 d-flex justify-content-between border-start border-warning border-4">
                        <div class="ms-3 dashboard-list-body">
                            <span class="text-border-color fs-5 fw-medium">Total Customers</span>
                            <h4>4.6K</h4>
                        </div>
                        <div class="dashboard-list-icon text-center align-self-center">
                            <ion-icon class="bg-warning text-warning bg-opacity-10 p-3 fs-4 rounded-2" name="person-add"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="dashboard-list overflow-hidden p-3 bg-white border border-2 border-secondary rounded-2 shadow-sm">
                    <div class="dashboard-list-header">
                        <h4 class="fs-5">Revenue Report</h4>
                    </div>
                    <div id="RevenueReport" class="dashboard-list-content py-2 d-flex justify-content-between">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="dashboard-list overflow-hidden p-3 bg-white border border-2 border-secondary rounded-2 shadow-sm">
                    <div class="dashboard-list-header">
                        <h4 class="fs-5">Earning</h4>
                    </div>
                    <div id="Earning" class="dashboard-list-content py-2 d-flex justify-content-between"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="dashboard-list overflow-hidden p-3 bg-white border border-2 border-secondary rounded-2 shadow-sm">
                    <div class="dashboard-list-header">
                        <h4 class="fs-5">Visitor</h4>
                    </div>
                    <div id="Visitor" class="dashboard-list-content py-2 d-flex justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection