<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all()->sortByDesc('id');
        return view('products.list', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function store(Product $product, Request $request): RedirectResponse
    {

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $path = $img->store('imgs', 'public');
            $product->img = $path;
        }
        /*$product->images = $request->images;*/
        $product->name = $request->name;
        $product->gender = $request->gender;
        $product->size = $request->size;
        $product->category = $request->category;
        $product->brand = $request->brand;
        $product->color = $request->color;
        $product->material = $request->material;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();

        Session::flash('success', 'add product success !');
        return redirect()->action([ProductController::class, 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function detail($id)
    {
        $product = DB::table('products')->where('id', $id)->get();
        // dd($product);
        return view('products.detail', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->hasFile('img')) {

            $currentImg = $product->img;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
                $img = $request->file('img');
                $path = $img->store('imgs', 'public');
                $product->img = $path;
            }
            /*  $product->images = $request->images;*/
            $product->name = $request->name;
            $product->gender = $request->gender;
            $product->size = $request->size;
            $product->category = $request->category;
            $product->brand = $request->brand;
            $product->color = $request->color;
            $product->material = $request->material;
            $product->price = $request->price;
            $product->status = $request->status;

            $product->save();
            Session::flash('success', 'success');
            return redirect()->action([ProductController::class, 'index'])
                ->with('success', 'Product updated successfully');

        }


        public function destroy($id)
        {
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect()->action([ProductController::class, 'index'])
                ->with('success', 'Product deleted successfully');
        }

    }
