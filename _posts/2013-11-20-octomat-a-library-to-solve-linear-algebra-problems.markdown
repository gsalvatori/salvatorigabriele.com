---
layout: post
title:  "octomat : A C++ library to solve linear algebra problems"
date:   2013-11-20 13:18:00
categories: projects
---

I worked for a while to this library to solve linear algebra problems and finally i released a publishable version, so, the library contains all the main features you need to consider it more or less "useful". Briefly, the functioning is very simple: you have to import only the library in a file, because it alredy includes all the needed <u>standard</u> libraries. Then you can call any function inside it:

```
#include <iostream>

#include "octomat.hpp"

using namespace std;
using namespace octomat;

int main(){

Matrix a(3,3);
Matrix b(3,3);

Matrix final(3,3);

a.fill_matrix();
b.fill_matrix();

final = a + b;

final.print_matrix();

return 0;

}
```

In this example, we declared three 3X3 matrix, final will contain the sum of a and b simply using the classic binary operator. How can this be possibile? C++ allows <b>operator overloading</b>, a specific case of polymorphism, where different operators have different implementations depending on their arguments. So, in practice, we have "reassigned" the procedure which consists in adding two matrices each other, to the + operator:

{% highlight C++ %}
Matrix Matrix::operator+ (const Matrix &other){

	Matrix result(*this);

    for (int i=0; i <rows_num(); i++){
    	for (int j=0; j<cols_num(); j++){

    		result.main_m[i][j] = main_m[i][j] + other.main_m[i][j];

    	}

    }

    return result;

}
{% endhighlight%}


This is just a small example, you can find all the features and the entire code at <a href="https://github.com/gsalvatori/octomat">this</a> link to the project on Github.


