@if(Session::has('success'))
                                <div class="alert alert-success">
                                <button class="close" data-close="alert"></button>
                                    {{ Session::get('success') }}
                                    @php
                                    Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    <button class="close" data-close="alert"></button>
                                    {{ Session::get('error') }}
                                    @php
                                    Session::forget('error');
                                    @endphp
                                </div>
                            @endif