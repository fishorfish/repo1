
    <script>
    document.write("<h2>Числа Фибоначчи </h2>");
    for (i=0, j=1, k=0, fib =0; i<50; i++, fib=j+k, j=k, k=fib){
        document.write("Fibonacci (" + i + ") = " + fib);
        document.write("<br>");
    }
	</script>