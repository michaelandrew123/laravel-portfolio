
const promise = new Promise((resolve, reject)=>{
    setTimeout(()=>{
        console.log("got the user");
      //  resolve({user: 'Michael Andrew'})
        reject(new Error("User not logged in"))
    }, 2000)
})


console.log('start')

promise.then(user=>{
    console.log(user)
}).catch(error=>console.log(error.message))

console.log('end')