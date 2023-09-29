<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:template match="/">
    <html style="margin-left:250px">
      <head>
        <title>Student List</title>
      </head>
      <body>
        <h1>Student List</h1>
        <table border="1">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Gender</th>
          </tr>
          <xsl:for-each select="Class/student">
            <tr>
              <td><xsl:value-of select="@id"/></td>
              <td><xsl:value-of select="name"/></td>
              <td><xsl:value-of select="address"/></td>
              <td><xsl:value-of select="gender"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
