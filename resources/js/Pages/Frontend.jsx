import React from 'react';
import Navbar from '@/Components/Homepage/navbar'
import Newslist from '@/Components/Homepage/newslist'

import { Link, Head } from '@inertiajs/react';

export default function Homepage(props){
    // console.log('ini adalah data parent : ', props)

    return(
       <>
        <Head title={props.title}/>
        <Navbar />
        <Newslist news={props.news}/>
            {/* <div className='grid justify-center items-center bg-slate-400'>
                <Head title={props.title}/>
                <p className='card w-full mt-6 text-white text-xl text-uppercase'>{props.penjelasan}</p>
                {props.news ? props.news.map((data, i ) => {
                        return(
                            <div key={i} className='p-4 m-2 bg-white text-black rounded-lg'>
                               <p className='text-2xl font-bold'>Title : {data.title}</p>
                               <p>Keterangan : {data.penjelasan}</p>
                               <p>Kategori : {data.kategori}</p>
                               <p>Penulis : {data.penulis}</p>
                            </div>
                        )
                }): <p>Belum ada data yang ditampilkan</p> }
            </div> */}
            
            </>
    )
}
