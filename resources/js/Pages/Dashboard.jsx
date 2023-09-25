import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Link, Head } from '@inertiajs/react';

import Sidebar from '../Components/Dashboard/Sidebar'

export default function Dashboard({ auth }) {
    return (
        <>
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard Sigitmatika</h2>}
        >
            <Head title="Dashboard" />


        

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        {/* <div className="p-6 text-gray-900">You're logged in! </div> */}
                        <div className="p-6 text-gray-900 text-center">Selamat Datang! di PT. Sigitmatika Mitra Energi</div>
                        
                        @can('admin')
                        <div className="p-6 text-gray-900 text-center">Anda Sudah Login !</div>
                        @endcan
                        
                    </div>
                </div>
            </div>

        </AuthenticatedLayout>

      
        
        </>
    );
}
