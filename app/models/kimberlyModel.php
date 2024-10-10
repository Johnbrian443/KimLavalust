<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class kimberlyModel extends Model {
    public function getUsers()
    {
        return $this->db->table('Activity2')->get_all();
    }
    public function searchUser($id)
    {
        return $this->db->table('Activity2')->where('id', $id)->get()->getRowArray();
    }
    public function addUser($data)
    {
        return $this->db->table('Activity2')->insert($data);
    }
    public function updateToken($id,$data)
    {
        return $this->db->table('Activity2')->where('id',$id)->update($data);
    }
    public function generateOTP($userId)
    {
        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        $expiry = date('Y-m-d H:i:s', strtotime('+15 minutes'));
        $this->db->table('Activity2')->where('id', $userId)->update([
            'otp' => $otp,
            'otp_expiry' => $expiry
        ]);
        return $otp;
    }

    public function verifyOTP($userId, $otp)
{

    $user = $this->db->table('Activity2')
        ->where('id', $userId)
        ->where('otp', $otp)
        ->get();  
    
    if (!empty($user)) {
        $this->db->table('Activity2')
            ->where('id', $userId)
            ->update([
                'token' => 'verified',
                'otp' => null,
                'otp_expiry' => null
            ]);
        return true;
    }

    return false;
}

    
}
?>
