import threading
import time


def prime(n):
    if n < 2:
        return False
    for i in range(2, int(n ** 0.5) + 1):
        if n % i == 0:
            return False
    return True


def find_primes(start, end):
    primes = []
    for n in range(start, end + 1):
        if prime(n):
            primes.append(n)
    return primes


def run_sequential():
    start_time = time.perf_counter()  # Start measuring the runtime
    primes = find_primes(1, 25000)  # Get prime numbers from 1 to 25000
    end_time = time.perf_counter()  # Stop measuring the runtime
    runtime = end_time - start_time  # Calculate the runtime
    print(f"Prime numbers: {primes}")
    print(f"Runtime: {runtime:.6f} seconds")
    return runtime


num_runs = 10
total_runtime = 0

for run in range(num_runs):
    print(f"Run {run + 1}:")
    runtime = run_sequential()  # Execute the sequential approach
    total_runtime += runtime
    print("------------------------")

average_runtime = total_runtime / num_runs
print(f"Average Runtime: {average_runtime:.6f} seconds")
