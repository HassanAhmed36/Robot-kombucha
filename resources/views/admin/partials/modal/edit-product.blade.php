 <div class="modal-dialog modal-lg">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="myModalLabel">Add Product</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <form action="{{ route('product.update', ['id' => $product->id]) }}" method="post"
                 enctype="multipart/form-data">
                 @csrf
                 <div class="row">
                     <div class="col-md-4 mb-3">
                         <label for="name" class="form-label">Product Name</label>
                         <input type="text" class="form-control" id="name" name="name"
                             placeholder="Enter product name" value="{{ $product->name }}" required>
                     </div>
                     <div class="col-md-4 mb-3">
                         <label for="product_price" class="form-label">Product Price</label>
                         <input type="number" class="form-control" id="price" name="price"
                             placeholder="Enter product price" required value="{{ $product->price }}">
                     </div>

                     <div class="col-md-4 mb-3">
                         <label for="branch_id" class="form-label">Product Image</label>
                         <input class="form-control" name="product_image[]" type="file" multiple>
                     </div>
                     <div class="col-md-12 mb-3">
                         <label for="stock_alert" class="form-label">Description</label>
                         <textarea name="description" id="" rows="8" class="form-control">{{ $product->description ?? '' }}</textarea>
                     </div>
                     <div class="col-12">
                         @foreach ($product->images as $image)
                             <div class="border my-2 py-2 d-flex justify-content-between align-items-center px-2">
                                 <div>
                                     <img src="{{ asset($image->image_path) }}" alt=""
                                         class="avatar-sm rounded">
                                 </div>
                                 <div>
                                     <a href="{{ route('product.image.delete', ['id' => $image->id]) }}"
                                         class="btn btn-danger btn-sm"><i class="fa fa-trash m-0"></i></a>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                     <div class="col-md-12 my-3">
                         <button class="btn btn-primary" type="submit">Add Product</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
