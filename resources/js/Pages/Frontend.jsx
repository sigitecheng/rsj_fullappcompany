import React from 'react';
import Navbar from '../Components/Homepage/Navbar'
import Newslist from '../Components/Homepage/Newslist'
import Paginator from '../Components/Homepage/Paginator'

import { Link, Head } from '@inertiajs/react';

export default function Homepage(props){
    // console.log('ini adata props : ', props);
    return(
       <>
       <div className="min-h-screen bg-slate-300">
        <Head title={props.title}/>
        <Navbar user={props.auth.user} />
        <div className="flex justify-center mx-4 my-4 flex-col lg:flex-row lg:flex-wrap lg:items-stretch items-center gap-4">
            <Newslist news = {props.news.data}/>
        </div>
        <div className=" bg-slate-300 p-4">
            <Paginator meta = {props.news.meta} />
        </div>
        </div>
            </>
    )
}
