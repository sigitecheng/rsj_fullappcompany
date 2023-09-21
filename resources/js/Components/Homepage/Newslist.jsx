const isNews = ( news ) => {
    // console.log('ini data baru', news)
    return news.map((data, i) => {
            return <div className="flex flex-wrap"> 
            <div key={i} className="mx-auto bg-slate-200 card w-96 glass mt-2 mb-2 rounded-xl">
            <figure><img src="https://picsum.photos/seed/picsum/200/300" alt="car!"/></figure>
            <div className="card-body">
            <h2 className="card-title">{data.title}</h2>
            <p>{data.penjelasan}</p>
            <div className="card-actions justify-end">
                <button className="btn btn-primary">{data.kategori}</button>
                <button className="btn btn-success">{data.penulis}</button>
            </div>
            </div>
            </div>
        </div>
    })
}

const Newslist = ({ news }) => {
        return isNews(news)
}

export default Newslist
