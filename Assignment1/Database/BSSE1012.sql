// C:\Program Files\MongoDB\Server\4.4\bin
//mongoimport --db webtech --collection restaurants --drop --file C:\Users\Asus\Desktop\Angular\restaurants.json

//q#1
db.restaurants.find().pretty() ;

//q#2
db.restaurants.find({},{restaurant_id:1, name:1, borough:1, cuisine:1}).pretty() ;

//q#3
db.restaurants.find({},{restaurant_id:1, name:1, borough:1, cuisine:1, _id:0}).pretty() ;

//q#4
 db.restaurants.find({},{restaurant_id:1, name:1, borough:1, address:{zipcode:1}, _id:0}).pretty() ;

//q#5
db.restaurants.find({borough: "Bronx"}) ;

//q#6
db.restaurants.find({borough: "Bronx"}).limit(5).pretty() ;
 
//q#7
db.restaurants.find({borough: "Bronx"}).skip(5).limit(5).pretty() ;

//q#8
 db.restaurants.find({grades:{$elemMatch: {score: {$gt : 90}}}}).pretty() ;
 
//q#9
db.restaurants.find({grades:{$elemMatch: {score: {$gt: 80, $lt: 100}}}}).pretty() ;

//q#10
db.restaurants.find({"address.coord": {$lt: -95.754168}}).pretty() ;

//q#11
db.restaurants.find({"cuisine": {$ne: "American "}, grades: {$elemMatch: {score: {$gt: 70}}}, "address.coord": {$lt: -65.754168}}).pretty() ;

//q#12
db.restaurants.find({"cuisine": {$ne: "American "}, grades: {$elemMatch: {grade: "A"}}, borough:{$ne: "Brooklyn"}}).sort({cuisine:-1}).pretty() ;

//q#13
db.restaurants.find({name: /^Wil/},{restaurant_id:1, name:1, borough: 1, cuisine: 1}).pretty() ;

//q#14
 db.restaurants.find({borough: "Bronx", cuisine: {$in: ["American ", "Chinese"]}}).pretty() ;
 
//q#15
 db.restaurants.find({borough: {$in: ["Staten Island","Queens","Bronx","Brooklyn"]}},{restaurant_id:1, name:1, borough: 1, cuisine: 1}).pretty() ;
 
//q#16
 db.restaurants.find({borough: {$nin: ["Staten Island","Queens","Bronx","Brooklyn"]}},{restaurant_id:1, name:1, borough: 1, cuisine: 1}).pretty() ;
 
//q#17
 db.restaurants.find({grades: {$elemMatch: {score: {$mod:[7,0]}}}},{restaurant_id: 1, name: 1, grades: 1}).pretty() ;
 
//q#18
 db.restaurants.find({name: {$regex: "mon.*", $options: "i"}},{name: 1, borough: 1, "address.coord": 1, cuisine:1}).pretty() ;
 
//q#19
 db.restaurants.find({name: /^Mad/},{name: 1, borough: 1, "address.coord": 1, cuisine:1}).pretty() ;
 
 
 



