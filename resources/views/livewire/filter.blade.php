<div>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <select class="form-select" wire:model.live="perPage">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <input type="text" wire:model.live="searchTerm" class="form-control">
            </div>
            <div>
                <table class="table table-bordered" style="margin: 10px 0">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                </table>
                {{$users->links('livewire.livewire-pagination')}}
            </div>

        </div>
    </div>
   </div>
</div>
