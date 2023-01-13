<?php


class DonatController extends Controller
{
    #method index - get all resources
    public function index()
    {
        #menggunakan model Donat untuk select data
        $Donat = Donat::all();

        if($Donat){
            $data = [
                'message' => 'Get all Donat',
                'data' => $Donat
            ];

            #menggunakan respons json laravel
            #otomatis set header content type json
            #otomatis mengubah data array ke json
            #mengatur status code
            return response()->json($data, 200);
        } else{
            $data = [
                'message' => 'Data Donat not found'
            ];

            #mengembalikan data (json) status code 404
            return response()->json($data, 404);
        }
    }

    #method store - menambahkan resource
    public function store(Request $request)
    {
        #menangkap request
        /*
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];
        */

         # membuat validasi
         $validatedData = $request->validate([
            # kolom => rules|rules
            'nama' => 'required',
            'nim' => 'numeric|required',
            'email' => 'email|required',
            'jurusan' => 'required',
        ]);

        # menggunakan donat untuk insert data
        $donat = Donat::create($validatedData);

        $data = [
            'message' => 'Donat is created successfully',
            'data' => $donat,
        ];

        # mengembalikan data (json) status code 201
        return response()->json($data, 201);
    }

    # method update - mengupdate resource
    public function update(Request $request, $id){
        # cari id donat yang ingin dicari
        $donat = Donat::find($id);
        
        if($donat){
            $input = [
                'nama' => $request->judul ?? $donat->judul,
                'nim' => $request->harga ?? $donat->harga,
                'email' => $request->penulis ?? $donat->penulis,
                'jurusan' => $request->penerbit ?? $donat->penerbit,
            ];

            #melakukan update data
            $donat->update($input);

            $data = [
                'message' => 'Donat id '. $id . ' is updated',
                'data' => $donat
            ];

            #mengembalikan data (json) status code 200
            return response()->json($data, 200);
        }else{
            $data = [
                'message' => 'Data donat id ' . $id . ' not found'
            ];

            #mengembalikan data (json) status code 404
            return response()->json($data, 404);
        }

    }

    # method destroy - menghapus resource (id)
    public function destroy($id)
    {
        # cari id donat yang ingin dicari
        $donat = Donat::find($id);

        if($donat){
            $donat->delete();

            $data = [
                'message' => 'donat with id '. $id . ' is removed'
            ];

            #mengembalikan data (json) status code 200
            return response()->json($data, 200);
        } else{
            $data = [
                'message' => 'Data donat id ' . $id . ' not found'
            ];

            #mengembalikan data (json) status code 404
            return response()->json($data, 404);
        }
    }

    # method show - mendapatakan detail donat
    public function show($id){
        # cari id donat yang ingin dicari
        $donat = Donat::find($id);

        if($donat){
            $data = [
                'message' => 'Get detail donat id ' . $id,
                'data' => $donat
            ];

            #mengembalikan data (json) status code 200
            return response()->json($data, 200);
        } else{
            $data = [
                'message' => 'Data donat id ' . $id . ' not found'
            ];

            #mengembalikan data (json) status code 404
            return response()->json($data, 404);
        }
    }

}
