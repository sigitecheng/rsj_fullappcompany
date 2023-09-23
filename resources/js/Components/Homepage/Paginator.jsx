import React from 'react';

// impor rect icon 
import { FaRegArrowAltCircleLeft } from 'react-icons/fa';
import { FaRegArrowAltCircleRight } from 'react-icons/fa';

// import {Link} from '@inertiajs/inertia-react'
import { Link} from '@inertiajs/react';

const Paginator = ({meta}) => {
    console.log(meta);
    const prev = meta.links[0].url ; 
    const next = meta.links[meta.links.length - 1].url ;
    const current = meta.current_page ; 
        return(
            <>
                <div className="btn-group flex flex-wrap justify-center mb-2">
                    {prev && <Link href={prev} className="btn-outline bg-gradient-to-l from-blue-900 to-blue-400 hover:bg-blue-400 text-white font-bold py-2 px-6 rounded-l-full transition duration-300 ease-in-out"><FaRegArrowAltCircleLeft className='mt-1'/></Link>}
                    <button className="btn-outline bg-blue-900 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-none transition duration-300 ease-in-out">{current}</button>
                    {next && <Link href={next} className="btn-outline bg-gradient-to-r from-blue-900 to-blue-400 hover:bg-blue-400 text-white font-bold py-2 px-6 rounded-r-full transition duration-300 ease-in-out"><FaRegArrowAltCircleRight className='mt-1'/></Link>}
                </div>
            </>
        )
}

export default Paginator 
