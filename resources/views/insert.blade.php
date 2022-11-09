@include('layouts.header')

<br>

<div class="container">
    <div class="text-center mb-4">
        <h3>Add New Item</h3>
        <p class="text-muted">Fill out the form below</p>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="POST" action="/insert" style="width:50vw; min-width:300px;">
            @csrf
            <div class="d-flex flex-column align-items-center">
                <div class="mb-3 w-100">
                    <label for="ItemName">Product Name:</label>
                    <input name="inputName" type="text" class="form-control" placeholder="Name">
                </div>

                <div class="mb-3 w-100">
                    <label for="ItemStatus">Product Status:</label>
                    <input name="inputStatus" input type="text" class="form-control" placeholder="Status">
                </div>

                <div class="mb-3 w-100">
                    <label for="ItemQuantity">Product Quantity</label>
                    <input name="inputQuantity" input type="text" class="form-control" placeholder="Quantity">
                </div>

                <div class="col">
                    <label for="ItemPrice">Product Price (Rp.)</label>
                    <input name="inputPrice" input type="text" class="form-control" placeholder="Price">
                </div>
                
                <br>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
    

</div>