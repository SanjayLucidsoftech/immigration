<div id="edit_menue">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Add New Menu</h4>
                                </div>
                                <form action="{{route('admin.settings.editMenu', ['id' => $site_menue_data->id])}}" class="form-horizontal" role="form" method="POST" name="add_menu" id="add_menu">
                                        {{ csrf_field() }}
								<div class="modal-body">
                                        
                                                <div class="form-group">
                                                        <label class="control-label col-md-4">Menu name <span class="required">
                                                                * </span></label>
                                                        <div class="col-md-8">
                                                                <input name="menue_name" class="form-control" type="text" value="{{$site_menue_data->menue_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="control-label col-md-4">Parent Menue</label>
                                                            <div class="col-md-8">
                                                                    <select name="parent" class="form-control select2">
                                                                            <option value="0"><strong>Self</strong></option>
                                                                            {{--  {!!html_entity_decode((new App\Healpers\General)->build_option($sitemenues))!!}  --}}
                                                                            @foreach ($sitemenues as $sitemenu)   
                                                                            <option value="{{$sitemenu->id}}" {{ $site_menue_data->parent == $sitemenu->id ? "selected" : "" }}>{{$sitemenu->menue_name}}</option>
                                                                             @endforeach
                                                                            </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <label class="control-label col-md-4">Link To</label>
                                                                <div class="col-md-8">
                                                                        <select name="menue_type"  class="form-control select2">
                                                                                <option value="page" {{ $site_menue_data->menue_type == 'page' ? "selected" : "" }}>Site Page</option>
                                                                                <option value="link" {{ $site_menue_data->menue_type == 'link' ? "selected" : "" }}>External Link</option>
                                                                                {{--  <option value="content">Content</option>  --}}
                                                                            </select>
                                                                </div>
                                                            </div>         

                                                            <div class="form-group">
                                                                    <label class="control-label col-md-4">Page</label>
                                                                    <div class="col-md-8">
                                                                            <select name="pages" class="form-control select2" >
                                                                                <option value="0" selected>--- Select Page ---</option>
                                                                                @foreach ($sitepages as $sitepage)   
                                                                                    <option value="{{$sitepage->alia}}" {{ $site_menue_data->link == $sitepage->alia ? "selected" : "" }}>{{$sitepage->title}}</option>
                                                                                 @endforeach
                                                                                </select>
                                                                    </div>
                                                                </div>  
                                            
                                                                <div class="form-group">
                                                                        <label class="control-label col-md-4">Insert Url</label>
                                                                        <div class="col-md-8">
                                                                                <input name="link" class="form-control" type="text" value="{{ $site_menue_data->menue_type == 'link' ? "{$site_menue_data->link}" : "" }}">
                                                                        </div>
                                                                    </div> 

                                            
                                            

                                        
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
									<button type="submit" class="btn green">Submit</button>
                                </div>
                            </form>
							</div>