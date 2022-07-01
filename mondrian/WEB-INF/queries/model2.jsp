<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/whsakila2021?user=root&password=" catalogUri="/WEB-INF/queries/model2.xml">

select {[Measures].[TotalDue]} ON COLUMNS,
  {([product],[time].[All times],[employee],[shipmethod].[All shipmethod],[vendor])} ON ROWS
from [Beli]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query WHSAKILA using Mondrian OLAP</c:set>
