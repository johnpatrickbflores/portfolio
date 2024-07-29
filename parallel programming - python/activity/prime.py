import threading
import time


def prime(n):
    if n < 2:
        return False
    for i in range(2, int(n ** 0.5) + 1):
        if n % i == 0:
            return False
    return True


def find_primes(start, end, result):
    primes = []
    for n in range(start, end + 1):
        if prime(n):
            primes.append(n)
    result.append(primes)


def run_parallel():
    start_time = time.perf_counter()  # Start measuring the runtime
    primes = []
    threads = []

    n_threads = 5
    size = 25000
    result = [[] for _ in range(n_threads)]

    for i in range(n_threads):
        start = i * size + 1
        end = (i + 1) * size
        thread = threading.Thread(target=find_primes, args=(start, end, result[i]))
        threads.append(thread)
        thread.start()
    for thread in threads:
        thread.join()

    for thread_result in result:
        primes.extend(thread_result)

    end_time = time.perf_counter() 
    runtime = end_time - start_time  

    print(f"Prime numbers: {primes}")
    print(f"Runtime: {runtime:.6f} seconds")
    return runtime


num_runs = 10
total_runtime = 0

for run in range(num_runs):
    print(f"Run {run + 1}:")
    runtime = run_parallel()  # Execute the parallel threading approach
    total_runtime += runtime
    print("------------------------")

average_runtime = total_runtime / num_runs
print(f"Average Runtime: {average_runtime:.6f} seconds")
