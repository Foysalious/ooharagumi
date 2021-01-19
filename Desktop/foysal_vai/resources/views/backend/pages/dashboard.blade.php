@extends('backend.template.layout')

@section('body-content')
<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">
        
        <!-- page indicator start -->
        <section class="page-indicator">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fas fa-home"></i>
                        </li>
                        <li>
                            dashboard
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->
    
        <!--
            Role 0 = user
            Role 1 = admin
            Role 2 = call center
            Role 3 = hr
        -->

        <!-- dashbaord statistics seciton start -->
        <section class="statistics">
            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12">
                    
                </div>
            </div>
            <div class="row">
                
                <!--- stat card start -->
                <div class="col-md-3">
                    <a href="#">
                        <div class="stat-card">
                            <i class="fas fa-history"></i>
                            <h3>Total</h3>
                            <p></p>
                        </div>
                    </a>                
                </div>
                <!--- stat card end -->
                <!--- stat card start -->


            </div>
        </section>
        <!-- dashbaord statistics seciton end -->

    </div>
</div>
<!-- main content end -->
@endsection