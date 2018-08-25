<?php

namespace App\Http\Controllers;

use App\Product;
use App\Type;
use App\Image;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products=Product::join('images','images.id','=','id_image')->join('types','types.id','=','id_type')->get();
      return view('admin.product_index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $types=Type::all();
      $categories=Category::all();
      return view('admin.product_create')->with('categories',$categories)->with('types',$types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(!$request->image)
    {
      return redirect()->route('product.create')->with('mensaje3', 'Es necesario subir una imagen');
    }
    $mime = $request->image->getMimeType();
    $extension = strtolower($request->image->getClientOriginalExtension());
    $fileName = uniqid().'.'.$extension;
    $path = "files_uploaded";
    switch ($mime)
    {
      case "image/jpeg":
      case "image/jpg":
      case "image/png":
      case "image/gif":
          if ($request->image->isValid())
          {
              $request->image->move($path, $fileName);
              $upload = new Image();
              $upload->url = $fileName;
              if($upload->save())
              {
                  $product=new Product;
                  $product->name=$request->name;
                  $product->description=$request->description;
                  $product->scale=$request->scale;
                  $product->year_factory=$request->year_factory;
                  $product->id_category=$request->category;
                  $product->id_type=$request->type;
                  $product->id_image=$upload->id;
                  $product->save();
                  return redirect()->route('product.index')->with('mensaje', 'Producto e imagen almacenados correctamente');
              }
              else
              {
                  return redirect()->route('product.index')->with('mensaje2', 'Ocurrio un error inesperado');
              }
          }
      break;
      default:
          return redirect()->route('product.create')->with('mensaje3', 'El formato de la imagen no es valido, debe ser JPG JPEG o GIF');
  }
      $product=new Product;

  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
