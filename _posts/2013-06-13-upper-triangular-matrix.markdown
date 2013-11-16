---
layout: post
title:  "Upper-Triangular Matrix"
date:   2013-06-13 16:03:00
categories: snippets
---

This is a simple python snippet to check if a N*N matrix is ​​upper triangular. It's an integrate part of a project I'm developing at the moment and hope will be completed very shortly: a Python class to solve linear algebra problems.

Code is very simple. It is composed by three functions, the first check if all pivots of the matrix are different from zero: 

{% highlight python %}
def check_pivot ( matrix ):

  for x in range(0,len(matrix)):
    if matrix[x][x] == 0:
      return False
  
  return True
{% endhighlight  %}

The second function check if all components below pivots are zero: 

{% highlight python %}
def check_zero(temp,matrix):

  k = 0
  c = 0

  condition = False

  for x in range(0,len(temp)):

    h = temp[x][k+1:len(matrix)]
    
    if h.count(0) == len(h):
      c = c + 1
      k = k + 1
      if c == len(matrix)-1:
        return True

  return condition
{% endhighlight  %}

The third and final function is used to insert each row of the matrix into a temporary array and continue with the other two functions:

{% highlight python %}
def triangular ( matrix ):

  if check_pivot(matrix):
  
    temp = []
    
    for i in range(0,len(matrix)-1):
      temp.append([])
      for j in range(0,len(matrix)):
        temp[i].append(matrix[j][i])
        

  return check_zero(temp,matrix)
{% endhighlight  %}

Now a simple main and we have finished.

{% highlight python %}
def main ():

  matrix = [[1,1,1,1],[0,1,1,1],[0,0,1,1],[0,0,0,0]]

  if triangular(matrix):

    print "Matrix is upper triangular."
  else:
    print "Matrix is NOT upper triangular."
{% endhighlight  %}




