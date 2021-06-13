<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $portfolioObject;

    public function __construct()
    {
        $this->portfolioObject = new Portfolio();
    }

    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('backend.admin.portfolio', compact('portfolios'));
    }

    public function store(PortfolioRequest $request)
    {
        $this->portfolioObject->storePortfolio($request);
        return back();
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolios = Portfolio::latest()->get();
        return view('backend.admin.portfolio', compact('portfolios', 'portfolio'));
    }

    public function update(PortfolioRequest $request, $id)
    {
        $this->portfolioObject->updatePortfolio($request, $id);
        return redirect()->route('admin.portfolios.index');
    }

    public function destroy($id)
    {
        $this->portfolioObject->destroyPortfolio($id);
        return back();
    }
}
