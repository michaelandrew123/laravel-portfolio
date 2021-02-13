//Callback, Promise, Async await
/*

function loginUser(email, password, callBack){
  
    setTimeout(()=> { 
        console.log ("Now we have the data");
        callBack({userEmail: email});
    }, 4000);
}

function getVideos(email, callBack){
    setTimeout(()=>{
        callBack(['video1', 'video2', 'video3']);
    }, 3000)
}

function videoDetails(video, callBack){
    setTimeout(()=>{
        callBack('Title of the Video')
    }, 2000)
}

console.log('Start');

const user = loginUser('michaelandrewsuarez@gmail.com', 1234, user => {
    console.log(user.userEmail)
    getVideos(user.userEmail, videos=>{
        console.log(videos)
        videoDetails(videos[0], title=>{
            console.log(title)
        })

    })
});
  

console.log('Finish');
*/
//refactor


function loginUser(email, password){
    return new Promise((resolve, reject)=>{
        setTimeout(()=> { 
            console.log ("Now we have the data");
            resolve({userEmail: email});
        }, 3000);
    })
}

function getVideos(email){

    return new Promise((resolve, reject)=>{
        setTimeout(()=>{
            resolve(['video1', 'video2', 'video3']);
        }, 2000)
    })
}

function videoDetails(video){
    return new Promise((resolve, reject)=>{
        setTimeout(()=>{
            resolve('Title of the Video')
        }, 1000)
    })
}

console.log('Start');

// loginUser("Michael", "ransak123")
// .then(user => getVideos(user.email))
// .then(videos => videoDetails(videos[0]))
// .then(detail=>console.log(detail))
  
//sync

async function displayUser(){

    try{ 
        const loggedUser = await loginUser('michael@gmail.com', 123421)
        const videos = await getVideos(loggedUser.userEmail)
        const detail = await videoDetails(videos[0])
        console.log(detail)
    }catch(err){
        console.log("We could not ge the video")
    }
}

displayUser()

// const user = loginUser('Mike', 'asda')


//Another example 
// const yt = new Promise(resolve=>{
//     setTimeout(()=>{
//         console.log("Getting stuff from youtube");
//         resolve({videos: [1, 2, 3, 4, 5]})
//     }, 2000)
// })
// const fb = new Promise(resolve=>{
//     setTimeout(()=>{
//         console.log("Stuff from facebook");
//         resolve({ user: "Michael"});
//     }, 5000)
// })

// Promise.all([yt, fb]).then(result => console.log(result))


console.log('Finish');