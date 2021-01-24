# DistanceCalculator
REST API to calculate distance between two points in meter/yards

Simple HTML form (without styling or validation) has been added to test the results with diffrent inputs quickly during development.

To solve the problem of calculating distance from two distinct points & units. I used some parameters which can be passed as user inputs : 1) first point of distance 2) second point of distance 3) unit for first point of distance 4) unit for second point of distance 3) unit for final result. 
Using all these Inputs, I prepared a simple REST API to calculate distance & provide results in JSON format.


To test the API in Postman please use below details : 

 API URL : http://localhost/DstanceCalcualtor/API/DistanceCalculator.php 

 Method : POST

 No authentication required 

Form data in Body with below parameters : 

1) first_point 2) second_point  (these parameters are used to calculate distance).

For all 3 keys mention below are required to add values either 0 for meter or 1 for yards. 

3) first_point_unit (unit for first point distance either 0 or 1)

4) second_point_unit (unit for second point distance either 0 or 1)

5) final_distance_unit (unit of final total distance either 0 or 1)
