<?php

namespace App\Modules\Department\Database\Seeds;

use App\Modules\DamageType\Models\DamageType;
use App\Modules\Department\Models\Department;
use App\Modules\Equipment\Models\Equipment;
use App\Modules\Fonction\Models\Fonction;
use App\Modules\ProfileGroup\Models\ProfileGroup;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = new Department();
        $department->name="IT";
        $department->save();

        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="ADMIN";
        $fonction->department_id=$department->id;
        $fonction->save();

        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="TECHNICIEN";
        $fonction->department_id=$department->id;
        $fonction->save();

        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="SUPERVISOR";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------



        $department = new Department();
        $department->name="TECHNIQUE";
        $department->save();
        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="ADMIN";
        $fonction->department_id=$department->id;
        $fonction->save();

        //-----------------------------
        $fonction= new Fonction();
        $fonction->name="TECHNICIEN";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="SUPERVISOR";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------




        $department = new Department();
        $department->name="OPERATIONS";
        $department->save();
        //-----------------------------
        $fonction= new Fonction();
        $fonction->name="DRIVER";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------

        $fonction= new Fonction();
        $fonction->name="FOREMAN";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------
        $fonction= new Fonction();
        $fonction->name="SHIFT MANAGER";
        $fonction->department_id=$department->id;
        $fonction->save();
        //-----------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="STS";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="STS1";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS2";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS3";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS4";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS5";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS6";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS7";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="STS8";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Fuel level";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="AIR CONDITIONING";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="RADIO & TABLET";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="IPADS CHARGER";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="RTG";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="RTG1";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG2";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG3";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG4";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG5";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG6";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG7";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG8";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG9";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG10";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG11";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG12";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG13";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="RTG14";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Fuel level";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="AIR CONDITIONING";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="RADIO & TABLET";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="IPADS CHARGER";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        //--------------------------------------------------------------

        $profileGroup=new ProfileGroup();
        $profileGroup->name="TT";
        $profileGroup->department_id=$department->id;
        $profileGroup->save();

        $equipment=new Equipment();
        $equipment->name="TT1";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT2";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT3";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT4";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT5";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT6";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT7";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT8";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $equipment=new Equipment();
        $equipment->name="TT9";
        $equipment->profile_group_id=$profileGroup->id;
        $equipment->save();

        $TechniqueDepartment=Department::select()->where("name","TECHNIQUE")->first();
        $ITDepartment=Department::select()->where("name","IT")->first();

        $damageType=new DamageType();
        $damageType->name="Fuel level";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="AIR CONDITIONING";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$TechniqueDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="RADIO & TABLET";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();

        $damageType=new DamageType();
        $damageType->name="IPADS CHARGER";
        $damageType->profile_group_id=$profileGroup->id;
        $damageType->department_id=$ITDepartment->id;
        $damageType->save();
    }
}

