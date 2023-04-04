@extends('layouts.app')
@section('title', 'Auth Settings')
@section('css')
@endsection

@section('content')

    <div class="card">
        <div class="card-header mx-4 p-3">
            <h4>CRM Auth Settings</h4>
        </div>
        <div class="card-body pt-0 p-3 text-center">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <form action="#" method="POST">
                        @csrf
                        {{-- CRM Client Id --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="crm_client_id" class="form-label">CRM Client Id</label>
                                    <input type="text" name="crm_client_id" id="crm_client_id" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{-- CRM Client Secret --}}
                                <div class="form-group">
                                    <label for="crm_client_secret" class="form-label">CRM Client Secret</label>
                                    <input type="text" name="crm_client_secret" id="crm_client_secret"
                                        class="form-control" value="">
                                </div>
                            </div>
                        </div>
                     
                            <div class="col-md-12 mt-2">
                                <input type="submit" value="Save" class="btn btn-primary btn-center">
                            </div>
                 
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection
