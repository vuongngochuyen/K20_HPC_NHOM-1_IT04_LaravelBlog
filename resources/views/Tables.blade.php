@extends('welcome')

   @section('content')
   <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
   <div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Project</th>
            <th>Client</th>
            <th>Users</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @if (!empty($tableList))
                 @foreach ($tableList as $key=>$item )
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->PROJECT }}</strong></td>
            <td>{{ $item->CLIENT }}</td>
            {{--  --}}
            <td><span class="badge bg-label-primary me-1">{{ $item->USERS }}</span></td>
            <td>{{ $item->STATUS }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          @endforeach
                 @else
                 <tr>
                    <td colspan="4">Khong co nguoi dung</td>
                </tr>
                @endif

        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  <hr class="my-5" />

  <!-- Bootstrap Dark Table -->
  <div class="card">
    <h5 class="card-header">Table Dark</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-dark">
        <thead>
          <tr>
            <th>Project</th>
            <th>Client</th>
            <th>Users</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
            <td>Albert Cook</td>

            <td><span class="badge bg-label-primary me-1">Active</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>

          </tr>
        </tbody>
      </table>
    </div>
  </div>

 </div>
</div>

@endsection
