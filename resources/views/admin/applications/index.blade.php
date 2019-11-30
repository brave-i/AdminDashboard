@extends('layouts.applications.layout')
@section('subcontent')

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12" align="right">
        <a class="btn btn-outline-success" href="{{ route("admin.applications.create") . "?status=" .$status }}">
            Add Application
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Applications
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Name
                        </th>
                        <th width="10%">
                            User ID
                        </th>
                        <th width="30%">
                            App ID
                        </th>
                        <th width="15%">
                            Application Type
                        </th>

                        <!-- <th>
                            &nbsp;
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $key => $application)
                      @foreach( $application->users as $user )
                        <tr data-entry-id="{{ $application->id }}">
                            <td>

                            </td>
                            <td>
                                
                                  {{ $loop->first ? '' : '' }} {{$user->name}}<!--<span class="badge badge-info">{{$user->name}}</span> -->

                            </td>
                            <td>
                                {{ $user->id ?? '' }} <a class="btn btn-xs btn-info" href="{{route('admin.userviewedit', [$user->id, $user->name]) . '?status=' . $status}}"> Detail</a>
                            </td>
                            <td>
                                {{ $application->id ?? '' }} <a class="btn btn-xs btn-primary" href="{{route('admin.appviewedit', $application->id) . '?status=' . $status}}"> Detail</a>
                            </td>
                            <td>
                                Joint
                            </td>
                            <!-- <td style="width: 10%; min-width: 200px;">
                                  <a class="btn btn-xs btn-primary" href="{{ route('admin.applications.show', $application->id) . '?status=' . $status }}">
                                      {{ trans('global.view') }}
                                  </a>
                                  <a class="btn btn-xs btn-info" href="{{ route('admin.applications.edit', $application->id) . '?status=' . $status }}">
                                      {{ trans('global.edit') }}
                                  </a>
                                  <form action="{{ route('admin.applications.destroy', $application->id) . '?status=' . $status }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                  </form>
                            </td> -->

                        </tr>
                      @endforeach
                                  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.applications.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('permission_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection