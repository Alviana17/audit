<?php

namespace App\Http\Controllers;
use App\Models\Audit;
use App\Models\User;
use App\Models\ParafKetuaTim;

use Illuminate\Http\Request;

class ParafKetuaTimController extends Controller
{
    public function index($auditId)
    {
        // Redirect to the audit show page
        return redirect()->route('audits.show', $auditId)
            ->with('success', 'Tanda tangan berhasil dibuat.');
    }
    
    public function save(Request $request)
    {
        // Define the path to store signatures
        $folderPath = storage_path('app/public/parafketuatim/');
        // Explode the base64 image data and get the image type
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        
        // Decode and store the image
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.' . $image_type;
        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);
        
        // Get the authenticated user's ID
        $userId = $request->input('id_user');
        
        // Get the audit ID from the request
        $auditId = $request->input('id_audit');
        
        // Save the signature data in the database
        ParafKetuaTim::create([
            'id_audit' => $auditId,
            'id_user' => $userId,
            'signature' => $fileName
        ]);
        // Redirect back to the audit show page with success message
        return redirect()->route('audits.show', $auditId)->with('success', 'Tanda tangan berhasil dibuat.');
    }
    
    
}
