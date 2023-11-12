@extends('admin_layouts.master')

@section('page_name', 'home page')

@section('css')
@endsection

@section('content')

    @if ($user)
        <h1>welcome {{ $user->first_name }} {{ $user->last_name }} </h1><br>
    @endif




    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    @if ($user)
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{ $user->image_url }}"
                                        alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{ $user->username }}</h3>

                                <p class="text-muted text-center">{{ $user->email }}</p>

                            </div>
                            <!-- /.card-body -->
                        </div>
                    @endif
                    <!-- /.card -->

                    <!-- About Me Box -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">twitter
                                        account</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        {{--
                                        @if ($twitterUsername)
                                        <h1>Welcome{{ $twitterUsername }}</h1>
                                         <h1>{{ $latestTweet }}</h1>
                                         @else
                                         <h5>twitter account not found</h5>
                                                @endif --}}
                                    </div>
                                    <!-- /.post -->




                                </div>
                                <!-- /.tab-pane -->
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection

@push('script')
@endpush
