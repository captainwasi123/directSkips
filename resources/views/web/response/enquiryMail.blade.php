<!DOCTYPE html>
<html>
<head>
<style>
 td, th {
  border-bottom: 1px solid black;
  padding:5px 10px;
  vertical-align: text-top;
}
table{
    text-align:left;
    width: 60%;
    border: 1px solid black;
}
.head{
    background-color: #e6e6e6;
}
@media only screen and (max-width: 600px) {
  .mt-30 {
    margin-top: 20px;
  }
}
</style>
</head>
<body>
    Dear <strong>24/7 Direct Skips</strong>,
    
    <p>You have received a new enquiry from the Contact Us page at <a href="www.247directskips.com" target="_blank">www.247directskips.com</a></p>
    <table>
        <tr>
            <th colspan="4" class="head">Details</th>
        </tr>
        <tr>
            <th colspan="2">Name</th>
            <td colspan="2">{{$first_name}} {{$last_name}}</td>
        </tr>
        <tr>
            <th colspan="2">Email</th>
            <td colspan="2">{{$email}}</td>
        </tr>
        <tr>
            <th colspan="2">Phone</th>
            <td colspan="2">{{$phone}}</td>
        </tr>
        <tr>
            <th colspan="2">Description</th>
            <td colspan="2">{{$description}}</td>
        </tr>
        
    </table>
    
    
    <br>
    <strong>Regards,</strong>
    <br><br>
    <img src="http://dnpprojects.com/projects/directSkip/assets/web/images/logo.png" width="200px">
    
    <p style="font-size:12px;" class="mt-30"><i>*24/7 Direct Skips Ltd is a National Skip Hire Brokerage. We work with a network of reputable and reliable skip companies (across the UK) to provide you with a "one-stop shop" solution for your skip hire needs.</i></p>
</body>
</html>