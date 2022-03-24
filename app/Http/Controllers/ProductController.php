<?php

namespace App\Http\Controllers;
use App\Models\ActivityLog;
use App\Models\Product;
use App\Models\User;
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
        //

        $product= Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //validasi
        //   $this->validate($request,[
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string|max:255',
        //     'image' => 'nullable|image',
        //     'barcode' => 'required|string|max:255',
        //     'price' => 'required|string|max:255',
        //     'quantity' => 'required|string|max:255',
        //     'status' => 'required|string|max:255',
        // ]);
        // //deklarasi image path
        // $image_path = '';
        // //cek apakah ada file gambar yang diupload
        // if ($request->hasFile('image')) {
        //     $image_path = $request->file('image')->store('product', 'public');
        // }
        // //insert data
        // $product = Product::create([
        //     'name'=>$request->input('name'),
        //     'description'=>$request->input('description'),
        //     'image'=>$image_path,
        //     'barcode'=>$request->input('barcode'),
        //     'price'=>$request->input('price'),
        //     'quantity'=>$request->input('quantity'),
        //     'status'=>$request->input('status'),
        // ]);
        //redirect

        $product = Product::create($request->all());
        if ($request->hasfile('image')) {
            $request->file('image')->move('gmbrproduct/', $request->file('image')->getClientOriginalName());
            $product->image = $request->file('image')->getClientOriginalName();
            $product->save();
        }
        activity()->log('Menambahkan Produk');
  if (!$product) {
            return redirect()->back()->with(['error' => 'error page create']);
        } else {
            return redirect()->route('product.index')->with('success', 'Data Berhasil ditambah');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


        $product = Product::find($id);
        return view('product.update', compact('product'));

    }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Product  $product
//      * @return \Illuminate\Http\Response
//      */
    public function update(Request $request, $id)
    {
        //
$product= Product::find($id);
         $product->update($request->all());
        if ($request->hasfile('image')) {
            $request->file('image')->move('gmbrproduk/', $request->file('image')->getClientOriginalName());
            $product->image = $request->file('image')->getClientOriginalName();
            $product->save();
        }
        activity()->log('Mengedit Produk');
        return redirect()->route('product.index', compact('product'))->with('success', 'Data Berhasil diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product=Product::find($id);
        $product->delete();
        activity()->log('Menghapus Produk');
        return redirect()->route('product.index')->with('success',' Data Berhasil Di Hapus');
    }
}