<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\GoiCredit;

    class GoiCreditController extends Controller
    {
        public function index(){
            $goiCredits = GoiCredit::all();
            return view('goi-credit.danh-sach', compact('goiCredits'));
        }

        public function create(){
            return view('goi-credit.form');
        }

        public function store(Request $request){
            $tenGoi = $request->ten_goi;
            $credit = $request->credit;
            $soTien = $request->so_tien;
            $flag = GoiCredit::withTrashed()->where('ten_goi', $tenGoi)->doesntExist();
            //
            if($flag){
                $goiCredit = new GoiCredit;
                $goiCredit->ten_goi = $tenGoi;
                $goiCredit->credit = $credit;
                $goiCredit->so_tien = $soTien;
                $goiCredit->save(); 
            }
            return view('goi-credit.form');
        }

        public function edit($id){
            $goiCredit = GoiCredit::find($id);
            return view('goi-credit.form', compact('goiCredit'));
        }

        public function update(Request $request, $id){
            $tenGoi = $request->ten_goi;
            $credit = $request->credit;
            $soTien = $request->so_tien;
            $goiCredit = GoiCredit::find($id);
            $flag = GoiCredit::withTrashed()->where('ten_goi', $tenGoi)->doesntExist();
            //
            if($flag){
                $goiCredit->ten_goi = $tenGoi;
                $goiCredit->credit = $credit;
                $goiCredit->so_tien = $soTien;
                $goiCredit->save(); 
            }
            return redirect()->route('goi-credit.danh-sach');
        }

        public function destroy($id){
            $goiCredit = GoiCredit::find($id);
            $goiCredit->delete();
            return redirect()->route('goi-credit.danh-sach');
        }
        //
        public function onlyTrashed(){
            $onlyTrasheds = GoiCredit::onlyTrashed()->get();
            return view('goi-credit.danh-sach', compact('onlyTrasheds'));
        }

        public function restore($id){
            $linhVuc = GoiCredit::onlyTrashed()->find($id);
            $linhVuc->restore();
            return redirect()->route('goi-credit.thung-rac');
        }

        public function delete($id){
            $linhVuc = GoiCredit::onlyTrashed()->find($id);
            $linhVuc->forceDelete();
            //$linhVuc->truncate();
            return redirect()->route('goi-credit.thung-rac');
        }
    }
?>
