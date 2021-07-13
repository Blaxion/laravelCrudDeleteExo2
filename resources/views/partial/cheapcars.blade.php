<div class="modal" tabindex="-1" id='exampleModal2'>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cheap Cars</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Year</th>
                            <th scope="col">Color</th>
                            <th scope="col">Price</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Discount Price</th>
                            <th scope="col">Utilities</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            @if ($car->price < 4000)
                                <tr>
                                    <th>{{ $car->id }}</th>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->year }}</td>
                                    <td>{{ $car->color }}</td>
                                    @if ($car->discount > 0)
                                        <td><s>{{ $car->price }}</s></td>
                                        <td>{{ $car->discount }}</td>
                                        <td>{{ $car->price - ($car->price / 100) * $car->discount }}</td>
                                    @else
                                        <td>{{ $car->price }}</td>
                                        <td>{{ '' }}</td>
                                        <td>{{ '' }}</td>
                                    @endif
                                    <td>
                                        <form action="/deletecar/{{ $car->id }}" method='POST'>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
