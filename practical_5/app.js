const fs=require('fs');
const fileName = "sample.txt";
const data =`
Employee Name : 'SURYA',
Employee Id : 0007
`;
fs.writeFile(fileName,"Employee Name : 'SURYA', \n Employee Id : 0007",function(err){
    if(err){
        console.log(err);
    }
    else{
        console.log("file created");
    }
    fs.readFile(fileName,(err,data)=>{
        if(err){
            console.log(err);
        }
        else{
            console.log(data);
        }
    });
   // console.log(data);
});