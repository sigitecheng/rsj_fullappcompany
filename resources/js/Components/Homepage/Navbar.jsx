import React from 'react';
import { Link, Head } from '@inertiajs/react';

// import icon
import { HiOutlineLocationMarker } from 'react-icons/hi';

// import img
import img from '@/img/alif.jpg'

const Navbar = () => {
    return(

<div className="navbar bg-slate-600">
  <div className="flex-1">
    <a className="btn btn-ghost normal-case text-xl text-white"><HiOutlineLocationMarker className='icon' />Sigitmatika</a>
  </div>
  <div className="flex-none gap-2">
    <div className="form-control">
      <input type="text" placeholder="Search" className="input input-bordered w-24 md:w-auto" />
    </div>
    <div className="dropdown dropdown-end">
      <label tabIndex={0} className="btn btn-ghost btn-circle avatar">
        <div className="w-10 rounded-full">
          <img src='https://picsum.photos/100/100' type='jpeg/jpeg'/>
        </div>
      </label>
      <ul tabIndex={0} className="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
        <li>
          <a className="justify-between">
            Profile
            <span className="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>

    )
}

export default Navbar